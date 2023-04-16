<?php

namespace App\Service\Models\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Chat;
use App\Models\Post;
use App\Models\Tag;
use App\Service\BaseService;
use App\Service\Models\EloquentRepository;
use Illuminate\Support\Facades\DB;

class PostService extends BaseService
{
    protected PostEloquentRepository $repository;

    public function getEloquent(): EloquentRepository
    {
        return $this->repository;
    }

    public static function index(FilterRequest $request): array|\LaravelIdea\Helper\App\Models\_IH_Post_C|\Illuminate\Pagination\LengthAwarePaginator
    {
        $data = $request->validated();

        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 5;

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        return Post::orderByDesc('id')->filter($filter)->paginate($perPage, ['*'], 'page', $page);
    }

    public static function store(StoreRequest $request): Post|string
    {
        try {
            DB::beginTransaction();

            $data = self::dataTags($request)['data'];
            $tags = self::dataTags($request)['tags'];

            $data['user_id'] = \Auth::user()->id;
            $post = Post::create($data);

            self::addTags($tags, $post);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post;
    }

    public static function update(UpdateRequest $request, Post $post): string|Post|null
    {
        try {
            DB::beginTransaction();

            $data = self::dataTags($request)['data'];
            $tags = self::dataTags($request)['tags'];
            $post->update($data);
            self::addTags($tags, $post);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post->fresh();
    }

    public static function destroy(Post $post): string|\Illuminate\Http\RedirectResponse
    {
        try {
            DB::beginTransaction();

            Chat::destroy($post->chats);
            $post->delete();

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return redirect()->route('posts.index');
    }

    /*
     * PRIVATE FUNCTIONS
     * */
    private static function dataTags($request): array
    {
        $data = $request->validated();

        $data['tags'] = trim(str_replace('#', '', $data['tags']));
        $tags = ($data['tags'] != '') ? explode(' ', $data['tags']) : ['NoTags'];

        unset($data['tags']);
        return ['data' => $data, 'tags' => $tags];
    }

    private static function addTags(array $tags, Post $post): void
    {
        $post->tags()->detach();
        foreach ($tags as $tag) {
            $tag = Tag::firstOrCreate([
                'title' => $tag,
            ]);
            $post->tags()->attach($tag->id);
        }
    }
}

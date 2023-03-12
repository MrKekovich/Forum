<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}/posts</loc>
        <lastmod>2023-03-06T16:36:33+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/') }}/posts/create</loc>
        <lastmod>2023-03-06T16:36:33+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/posts/{{ $post->id }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($chats as $chat)
        <url>
            <loc>{{ url('/') }}/chats/{{ $chat->id }}</loc>
            <lastmod>{{ $chat->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
{{--    @foreach ($users as $user)--}}
{{--        <url>--}}
{{--            <loc>{{ url('/') }}/users/{{ $user->id }}</loc>--}}
{{--            <lastmod>{{ $user->created_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.8</priority>--}}
{{--        </url>--}}
{{--    @endforeach--}}
{{--    @foreach ($tags as $tag)--}}
{{--        <url>--}}
{{--            <loc>{{ url('/') }}/tags/{{ $tag->id }}</loc>--}}
{{--            <lastmod>{{ $tag->created_at->tz('UTC')->toAtomString() }}</lastmod>--}}
{{--            <changefreq>weekly</changefreq>--}}
{{--            <priority>0.8</priority>--}}
{{--        </url>--}}
{{--    @endforeach--}}
</urlset>


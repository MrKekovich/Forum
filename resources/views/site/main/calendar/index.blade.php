@extends('layouts.admin')
@section('style')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://mrkekovich.github.io/projects/calendar/css/style.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="calendar calendar-first" id="calendar_first">
                    <div class="calendar_header">
                        <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                        <h2>March 2023</h2>
                        <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="calendar_weekdays"><div style="color: rgb(68, 68, 68);">Sun</div><div style="color: rgb(68, 68, 68);">Mon</div><div style="color: rgb(68, 68, 68);">Tue</div><div style="color: rgb(68, 68, 68);">Wed</div><div style="color: rgb(68, 68, 68);">Thu</div><div style="color: rgb(68, 68, 68);">Fri</div><div style="color: rgb(68, 68, 68);">Sat</div></div>
                    <div class="calendar_content"><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="past-date">1</div><div class="past-date">2</div><div class="past-date">3</div><div class="past-date">4</div><div class="today" style="color: rgb(0, 189, 170);">5</div><div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://mrkekovich.github.io/projects/calendar/js/jquery.min.js"></script>
    <script src="https://mrkekovich.github.io/projects/calendar/js/popper.js"></script>
    <script src="https://mrkekovich.github.io/projects/calendar/js/bootstrap.min.js"></script>
    <script src="https://mrkekovich.github.io/projects/calendar/js/main.js"></script>
@endsection

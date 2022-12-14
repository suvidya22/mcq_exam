<div class="page-title">
    <div class="title_left">
        <h3>Test Result</h3>
    </div>
    <div class="title_right">
        <div class="form-group pull-right top_search">
        </div>
    </div>

    <div style="position: absolute; top: 0; right: 0; width: 100px; text-align:right;">
        <div class="row input_row">
            <div class="col-md-12">
                <div class="form-group">
                    <a href="{{ route('exams.view-results') }}" class="btn btn-default">View all results</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <a href="{{ '/' }}" class="btn btn-default"> Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Your Score : {{ $score }}/10</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @foreach ($questions as $question)
                    <div class="row input_row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Q : {{ $question->question }}
                                </label>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    @foreach ($question->options as $opt)
                                        @if ($opt->is_right_option == 0)
                                            Ans : {{ $opt->option }}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                @endforeach

            </div>
        </div>
    </div>

</div>

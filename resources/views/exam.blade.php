<h2><strong>Questions</strong></h2>
<hr>

<form method="POST" action="{{ route('exams.accept') }}" class="">
    <input type="hidden" name = "studDetails" value="{{$id}}">
    @foreach ($questions ?? '' as $key => $question)
        <div class="row input_row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Question {{ $key + 1 }}</label>
                    <div class="col-md-10 col-sm-10 col-xs-10">
                        {{ $question->question }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row input_row">
            <div class="col-md-12">
                <div class='form-group'>
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">
                            Options
                    </label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        @if ($question->type == '')
                            <div class="radio">
                                <label>
                                    @foreach ($question->options as $opt_key => $option)
                                        <input type="radio" required="required" value="{{ $option->option_id }}"
                                            name="{{ $question->question_id }}"> {{ $option->option }} &nbsp; &nbsp;
                                    @endforeach
                                </label>
                            </div>
                        @else
                            <textarea aria-rowspan="3" aria-colspan="12" name="{{ $question->question_id }}"></textarea>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach

    <div class="row input_row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Submit</button> &nbsp;
                    <a href="{{('/')}}" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

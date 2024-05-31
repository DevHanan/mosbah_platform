<div class="">
    <div data-action="{{ !empty($quiz) ? ('/panel/quizzes/'. $quiz->id .'/update') : ('/panel/quizzes/store') }}" class="js-content-form quiz-form webinar-form">

       

            <section class="mt-30">
                <div class="d-block d-md-flex justify-content-between align-items-center pb-20">
                    <h2 class="section-title after-line">{{ trans('public.questions') }}</h2>

                    <div class="d-flex align-items-center mt-20 mt-md-0">
                        <button id="add_multiple_question" 
                        type="button" class="quiz-form-btn btn btn-primary btn-sm ml-10">{{ trans('quiz.add_multiple_choice') }}</button>
                        <button id="add_descriptive_question" 
                        type="button" class="quiz-form-btn btn btn-primary btn-sm ml-10">{{ trans('quiz.add_descriptive') }}</button>
                    </div>
                </div>

               
            </section>

        <input type="hidden" name="ajax[{{ !empty($quiz) ? $quiz->id : 'new' }}][is_webinar_page]" value="@if(!empty($inWebinarPage) and $inWebinarPage) 1 @else 0 @endif">

        <div class="mt-20 mb-20">
            <button type="button" class="js-submit-quiz-form btn btn-sm btn-primary">{{ !empty($quiz) ? trans('public.save_change') : trans('public.create') }}</button>

            @if(empty($quiz) and !empty($inWebinarPage))
                <button type="button" class="btn btn-sm btn-danger ml-10 cancel-accordion">{{ trans('public.close') }}</button>
            @endif
        </div>
    </div>

    <!-- Modal -->
@if(!empty($quiz))
    @include(getTemplate() .'.panel.quizzes.modals.multiple_question',['quiz' => $quiz])
    @include(getTemplate() .'.panel.quizzes.modals.descriptive_question',['quiz' => $quiz])
@endif

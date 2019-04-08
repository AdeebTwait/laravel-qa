                        @csrf
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" value="{{ old('title', $question->title) }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                        </div>
                        @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                        @endif

                        <div class="form-group">
                            <label for="question-body">Explain Your Question:</label>
                            <textarea name='body' id='question-body' value="{{old('body')}}" class="form-control {{$errors->has('body')? 'is-invalid':''}}" rows="10">{{$question->body}}</textarea>
                        </div>
                        @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                        @endif
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                        </div>
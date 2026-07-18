
                    <div class="row">

                        <div class="col-md-12">
                            <label>Question</label>

                            <textarea
                                rows="5"
                                name="question"
                                class="form-control"
                                >{{ old('question', $faq->question ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12">
                            <label>Answer</label>

                            <textarea
                                rows="5"
                                name="answer"
                                class="form-control"
                                >{{ old('answer', $faq->answer ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6">

                            <label>Display Order</label>

                            <input
                                type="text"
                                name="display_order"
                                class="form-control"
                                value="{{ old('display_order', $faq->display_order ?? '') }}">
                        </div>       

                        <div class="col-md-6">

                            <label>Status</label>

                            <select
                                name="status"
                                class="form-control">
                                <option value="1" {{ old('status', $education->status ?? '') == 1 ? 'selected' : '' }}>Active</option>

                                <option value="0" {{ old('status', $education->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>

                            </select>

                        </div>

                    </div>
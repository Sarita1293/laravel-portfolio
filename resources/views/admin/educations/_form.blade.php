
                    <div class="row">

                        <div class="col-md-6">
                            <label>Course</label>

                            <input
                                type="text"
                                name="course"
                                class="form-control"
                                value="{{ old('course', $education->course ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label>University</label>

                            <input
                                type="text"
                                name="university"
                                class="form-control"
                                value="{{ old('university', $education->university ?? '') }}">
                        </div>

                        <div class="col-md-6">

                            <label>Years</label>

                            <input
                                type="text"
                                name="years"
                                class="form-control"
                                placeholder="e.g. 2013 - 2015"
                                value="{{ old('years', $education->years ?? '') }}">
                        </div>

                        
                        <div class="col-md-12">

                            <label>Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control">{{ old('description', $education->description ?? '') }}
                            </textarea>

                        </div>

                        <div class="col-md-3">

                            <label>Display Order</label>

                            <input
                                type="number"
                                name="display_order"
                                value="{{ old('display_order', $education->display_order ?? '') }}"
                                class="form-control">

                        </div>

                        <div class="col-md-3">

                            <label>Status</label>

                            <select
                                name="status"
                                class="form-control">
                                <option value="1" {{ old('status', $education->status ?? '') == 1 ? 'selected' : '' }}>Active</option>

                                <option value="0" {{ old('status', $education->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>

                            </select>

                        </div>

                    </div>
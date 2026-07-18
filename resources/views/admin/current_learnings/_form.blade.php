
                    <div class="row">

                        <div class="col-md-12">
                            <label>Logo</label>

                            <input
                                type="text"
                                name="logo"
                                class="form-control"
                                value="{{ old('logo', $currentLearning->logo ?? '') }}"
                                placeholder="Example: fa-solid fa-code">

                                <small class="text-muted">
                                    Enter Font Awesome icon class. Example:
                                    <code>fa-solid fa-code</code>
                                </small>
                        </div>

                        <div class="col-md-12">
                            <label>Title</label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title', $currentLearning->title ?? '') }}">
                        </div>

                        
                        <div class="col-md-12">

                            <label>Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control">{{ old('description', $currentLearning->description ?? '') }}
                            </textarea>

                        </div>

                        <div class="col-md-3">

                            <label>Display Order</label>

                            <input
                                type="number"
                                name="display_order"
                                value="{{ old('display_order', $currentLearning->display_order ?? '') }}"
                                class="form-control">

                        </div>


                        <div class="col-md-3">

                            <label>Status</label>

                            <select
                                name="status"
                                class="form-control">
                                <option value="1" {{ old('status', $currentLearning->status ?? '') == 1 ? 'selected' : '' }}>Active</option>

                                <option value="0" {{ old('status', $currentLearning->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>

                            </select>

                        </div>

                    </div>
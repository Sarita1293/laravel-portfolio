
                    <div class="row">

                        <div class="col-md-6">
                            <label>Company Name</label>

                            <input
                                type="text"
                                name="company_name"
                                class="form-control"
                                value="{{ old('company_name', $experience->company_name ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label>Designation</label>

                            <input
                                type="text"
                                name="designation"
                                class="form-control"
                                value="{{ old('designation', $experience->designation ?? '') }}">
                        </div>

                        <div class="col-md-12">
                            <label>Project Name</label>

                            <input
                                type="text"
                                name="project_name"
                                class="form-control"
                                value="{{ old('project_name', $experience->project_name ?? '') }}">
                        </div>
                        
                        <div class="col-md-6">

                            <label>Start Date</label>

                            <input
                                type="date"
                                name="start_date"
                                class="form-control"
                                value="{{ old('start_date', $experience->start_date ?? '') }}">
                        </div>

                        <div class="col-md-6">

                            <label>End Date</label>

                            <input
                                type="date"
                                name="end_date"
                                class="form-control"
                                value="{{ old('end_date', $experience->end_date ?? '') }}">
                        </div>

                        <div class="col-md-6">

                            <label>Description</label>

                            <textarea
                                name="description"
                                rows="5"
                                class="form-control">{{ old('description', $experience->description ?? '') }}
                            </textarea>

                        </div>
                        <div class="col-md-6">
                            <label>Roles and Responsibilities</label>
                            <textarea
                                rows="5"
                                name="roles_and_responsibilities"
                                class="form-control">
                                {{ old('roles_and_responsibilities', $experience->roles_and_responsibilities ?? '') }} 
                            </textarea>
                        </div>

                        <div class="col-md-6">
                            <label>Currently Working</label>

                            <input
                                type="text"
                                name="currently_working"
                                class="form-control"
                                value="{{ old('currently_working', $experience->currently_working ?? '') }}">
                        </div>

                        <div class="col-md-6">

                            <label>Location</label>

                            <input
                                type="text"
                                name="location"
                                class="form-control"
                                value="{{ old('location', $experience->location ?? '') }}">

                        </div>

                        <div class="col-md-6">

                            <label>Display Order</label>

                            <input
                                type="text"
                                name="display_order"
                                class="form-control"
                                value="{{ old('display_order', $experience->display_order ?? '') }}">

                        </div>

                        <div class="col-md-6">

                            <label>Status</label>

                            <select
                                name="status"
                                class="form-control">
                                <option value="1" {{ old('status', $experience->status ?? '') == 1 ? 'selected' : '' }}>Active</option>

                                <option value="0" {{ old('status', $experience->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>

                            </select>

                        </div>

                    </div>
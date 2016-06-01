
<div class="mt-portlet-wrapper mt-card mdl-grid" ng-show="showForm" id="show_pages_form">
    <div class="admin-form-large mdl-cell mdl-cell--8-col">
        <form role="form">
            <div class="form-body">
                <div class="mt-form-group form-md-line-input">
                    <input type="text" class="form-control" id="page_title" placeholder="Enter a title">
                    <label for="page_title">Title</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
                <div class="mt-form-group form-md-line-input">
                    <input type="text" class="form-control" id="page_URI" placeholder="Enter page URI">
                    <label for="page_URI">URI</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
                <div class="mt-form-group form-md-line-input">
                    <input type="text" class="form-control" id="page_name" placeholder="Enter Name">
                    <label for="page_name">Name</label>
                    <span class="help-block">Some help goes here...</span>
                </div>
                <div class="mt-form-group form-md-line-input">
                       <textarea id="code_editor_demo_1" style="display: none;">
                            var handleDemo1 = function () {
                               var myTextArea = document.getElementById('code_editor_demo_1');
                               var myCodeMirror = CodeMirror.fromTextArea(myTextArea, {
                                  lineNumbers: true,
                                  matchBrackets: true,
                                  styleActiveLine: true,
                                  theme:"ambiance"
                               }
                            );}
                        </textarea>
                </div>
                <div class="mt-form-actions">
                    <button type="button" class="btn blue">Submit</button>
                    <button type="button" ng-click="showForm = !showForm" class="btn default">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>


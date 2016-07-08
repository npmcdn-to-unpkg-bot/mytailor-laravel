
                <!-- Black Screen -->
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->
            </div>
            <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
            {{-- <script src="{{ theme('vendor/material-design-lite/material.min.js') }}"></script> --}}
        <!-- Scripts -->
        <script src="{{ theme('js/app.js') }}"></script>

        <!-- Controllers -->
          <script src="{{ theme('js/controllers/shotsController.js') }}"></script>
        <script src="{{ theme('js/controllers/pagesController.js') }}"></script>

        <!-- Services -->
        <script src="{{ theme('js/services/shots.js') }}"></script>
        <script src="{{ theme('js/services/pages.js') }}"></script>
        <script src="{{ theme('js/script.js') }}"></script>

</body>
</html>

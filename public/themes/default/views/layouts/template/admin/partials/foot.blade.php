
                <!-- Black Screen -->
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->

        {{-- Material --}}
        <script src="{{ theme('vendor/material-design-lite/material.min.js') }}"></script>
        {{-- Algolia --}}
        <script src="{{ theme('vendor/instantsearch.js/dist/instantsearch.min.js') }}"></script>
        {{-- Site Styles --}}
        <script src="{{ theme('js/backend.js') }}"></script>
        <script src="{{ theme('js/backendScript.js') }}"></script>

        @yield('page_scripts')

</body>
</html>

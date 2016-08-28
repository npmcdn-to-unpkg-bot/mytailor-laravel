        //========== Instant Search JS ==========

    var options = {
          appId : 'RQO4LL16TO',
          apiKey : '53a754b22aa63d7a38a04c9ee76f596a',
          indexName : 'shots',
          urlSync: true
        }


        search = instantsearch(options);

          search.addWidget(
            instantsearch.widgets.searchBox({
              container: '#search-box',
              placeholder: 'search for items like men, women, shirts, shoes and more ...',

            })
          ); 

          search.addWidget(
            instantsearch.widgets.hits({
              container: '#hits-container',
              hitsPerPage: 10,
              templates: {
                item: getTemplate('hit'),
                empty: getTemplate('no-results')
              }
            })
          );

          search.addWidget(
              instantsearch.widgets.menu({
                container: '#categories',
                attributeName: 'category',
                limit: 10,
                templates: {
                  header: 'Categories'
                }
              })
            );

        function getTemplate(templateName) {
          return document.getElementById(templateName + '-template').innerHTML;
        }
          search.start();
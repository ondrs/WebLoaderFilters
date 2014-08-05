WebLoaderFilters
==============

Filters for Nette WebLoader

Instalation
-----

composer.json

    "ondrs/webloader-filters": "dev-master"

Usage
-----

config.neon:

    webloader:
        css:
            filters:
                - ondrs\WebLoaderFilters\Filters::cssMin

        js:
            filters:
                - ondrs\WebLoaderFilters\Filters::jsMin

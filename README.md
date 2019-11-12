# WCMI 2019 Example Project

Created to support the workshop "Acceptance testing in WP – Let’s automate the visual checks and regression testing (EN)"

## Installation

1. Clone this repository to the WordPress plugin folder. Depending on your local environment setup that might vary.
2. There is no need to install [Composer](https://getcomposer.org/) dependencies as those come pre-installed for you.
3. Start by writing, from the plugin root directory,  `vendor/bin/codecept init acceptance`.

### Stand-alone usage with containers

The plugin includes a `docker-compose.yml` file.  
The file contains a ready-to-run, container-based, stack you can use to run this project tests in isolation, without having to locally setup a WordPress installation.  

It requires a containerization solution like [Docker](https://hub.docker.com/search/?type=edition&offering=community) or [podman](https://podman.io/) and [docker-compose](https://docs.docker.com/compose/install/).

To setup tests to run against the stack create a `codeception.yml` file in the plugin root directory, with this content:

```yaml
params:
    - '.env.testing.docker'
```

Start the container stack with `docker-compose -d up`, wait for the WordPress website to be available at `http://localhost:8081`, and run `vendor/bin/codecept run acceptance --debug` to run the acceptance tests.

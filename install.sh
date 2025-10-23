#!/bin/sh

docker run --rm -v $(pwd):/app --user $(id -u):$(id -g) -w /app composer install --ignore-platform-reqs --no-interaction 


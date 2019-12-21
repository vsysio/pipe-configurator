# pipe-configurator
This app enables an app that uses hardcoded configuration values to require() a named pipe created by this application. This named pipe will return a dynamically generated PHP file that exposes variables and constants set in Redis.

## This has useful applications:

* It enables configuration values (such as feature toggles, database configuration, etc.) to be set in a web interface
* When using feature toggles, this enables the rapid toggling on and off of various feature toggles to test their functionality
* This enables feature toggles that are under development to be immediately disabled on production but enabled for development downstream

## My specific use case

* A Web application is built by a development team using a stack of Docker containers that each provide a service
* Each Docker container is defined from a Dockerfile and wired together using docker compose and a common network layer
* When a development team is happy with the progress of their build, they first perform a full build test from a base image
* An operations person then reproduces the Docker build
* A QA Analyst then access the system that Docker build creates and conducts their tests
* This pipe-configurator is used by the QA Analyst to dynamically reconfigure various values during the course of their testing
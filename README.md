# Compsoc website

Website for the University of Canterbury Computer Society (CompSoc), available
at <https://compsoc.org.nz/>.

## Set up

```
~$ ./run.sh
```

If a shell environment within the container is needed, run this afterwards:

```
~$ docker exec -it compsoc-server /bin/bash
```

### Useful commands in the Docker container

If changes are made to the settings while in the container shell:

```
# service apache2 reload
```

Check the apache config:

```
# apache2ctl configtest
```

## Todo list

The committee-2021 branch aims to transition the project to a Dockerised
container, for ease of development and maintenance.

- [ ] Set up HTTPS (Let's Encrypt) in Docker container
- [ ] Set up /pi/
- [ ] Finally, switch production environment to use Docker container

# How to set up

```
~$ docker build -t compsoc .
~$ docker run -dit --name compsoc-server -p 8080:80 compsoc
```

If the shell is needed:

```
~$ docker exec -it compsoc-server /bin/bash
```

## Useful commands in the Docker container

If changes are made to the settings while in the container shell:

```
# service apache2 reload
```

Check the apache config:

```
# apache2ctl configtest
```

# Old readme

Use Facebook Graph for Events: https://developers.facebook.com/docs/graph-api/reference/page/events/
e.g. UcCompSoc/events?fields=start_time,end_time,cover,description,id,attending_count

Needed content:
 * Home/About
 * Events
 * Careers
 * Networking
 * Committee
 * Registration?

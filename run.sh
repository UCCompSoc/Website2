#!/usr/bin/env bash

docker build -t compsoc . && docker run -dit --name compsoc-server -p 8080:80 compsoc

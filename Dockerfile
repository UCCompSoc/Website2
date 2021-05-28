FROM python:3.7-buster

RUN apt-get update; \
    apt-get upgrade; \
    apt-get install -y --no-install-recommends apache2 libapache2-mod-wsgi-py3

RUN git clone -b committee-2021 --depth 1 https://github.com/CompSocUC/Website2.git web

# https://stackoverflow.com/a/49705601
RUN cd web; \
    pip3 install pipenv; \
    pipenv install --deploy --system --ignore-pipfile

COPY apache/apache2.conf /etc/apache2/apache2.conf
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY apache/000-default-le-ssl.conf /etc/apache2/sites-available/000-default-le-ssl.conf

RUN a2enmod wsgi
RUN a2enmod rewrite
RUN a2ensite 000-default
RUN a2ensite 000-default-le-ssl
RUN service apache2 reload

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

# step-php
Repository for teaching students PHP

## Build from Docker

Create Dockerfile
```javascript
FROM tutum/lamp:latest
RUN rm -fr /app && git clone https://github.com/mkryuk/step-php.git /app
EXPOSE 80 3306
CMD ["/run.sh"]
```

Then build container:
```
docker build -t username/appname .
```

And run it:
```
docker run -d -p 80:80 -p 3306:3306 username/appname
```

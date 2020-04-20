#!/bin/bash
rm -rf webapp
cp -a /home/rajesh/data/rajesh/devel/html/webapp .
docker build . -t rajeshm9/ncli -t registry.heroku.com/ncli/networktool -t registry.heroku.com/ncli/web

#docker run -p 8080:8080 rajeshm9/webapp
#docker push registry.heroku.com/ncli/networktool
#heroku container:release networktool -a ncli
#heroku ps:scale networktool=1 -a ncli
#heroku labs:enable --app=ncli runtime-new-layer-extract
#heroku ps -a ncli
#

docker buildx build --platform linux/arm64 --load -t verekia/initializr .
docker save -o /tmp/initializr.tar verekia/initializr
scp /tmp/initializr.tar midgar:/tmp/
ssh midgar docker load --input /tmp/initializr.tar
ssh midgar docker compose up -d initializr

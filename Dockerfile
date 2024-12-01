FROM oven/bun:1.1.36-alpine AS builder

WORKDIR /app

COPY bun.lockb package.json .

RUN bun i

COPY . .

# Production stage

FROM nginx:1.26.2-alpine3.20-slim

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY --from=builder /app/public /usr/share/nginx/html

EXPOSE 80

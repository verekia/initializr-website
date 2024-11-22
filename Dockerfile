FROM oven/bun:1.1.36-alpine

WORKDIR /app

COPY bun.lockb package.json .

RUN bun i

COPY . .

CMD ["bun", "start"]

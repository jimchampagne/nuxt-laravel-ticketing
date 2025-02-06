FROM node:22-alpine

RUN apk add --no-cache curl bash

RUN curl -fsSL https://bun.sh/install | bash
ENV PATH="/root/.bun/bin:${PATH}"

WORKDIR /app

# Copy package.json and bun.lockb (if present)
COPY package*.json ./

# Install dependencies using Bun
RUN bun install

# Copy Nuxt.js app files
COPY . .

# Build the app for production (static site generation)
RUN bun run build

# Expose port for Nuxt.js (if using SSR, change this to match your server setup)
EXPOSE 3000

# Start the Nuxt.js app using Bun
CMD ["bun", "run", "start"]

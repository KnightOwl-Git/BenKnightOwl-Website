import { defineConfig, squooshImageService } from 'astro/config';


export default defineConfig({
  site: 'https://benknightowl.com',
  image: {
    service: squooshImageService(),
  },
})


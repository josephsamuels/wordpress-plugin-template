# WordPress Plugin Template

Template for a WordPress plugin.

## Prerequisites

- [Scoper](https://github.com/humbug/php-scoper)

## Working with the template

- Craft object-oriented PHP code inside `inc/classes` to have Composer dependencies re-scoped on build.
- Use NPM to load up whichever JavaScript framework you like to build front-end components inside the `src/admin` and 
  `src/frontend` paths. JavaScript in`admin` is loaded only for admin pages, `frontend` for user pages.
- When ready to deploy, run `./build`. A `.zip` of your project will be generated and placed inside `/builds`

## Final thoughts

Is this the best way to do this? I'm not sure, but it works for me so far.

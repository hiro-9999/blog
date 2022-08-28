>For frontend developers, TypeScript is well supported in all major UI libraries and frameworks, 
including Angular, which strongly recommends TypeScript, as well as Gatsby, Next.js, React, Svelte, and Vue. 
For backend developers, TypeScript generates JavaScript that runs natively in Node.js; Deno, a similar runtime by Node’s creator, emphasizes directly supporting TypeScript files.

Learning TypeScript Enhance Your Web Development Skills Using Type-Safe JavaScript (Josh Goldberg) (z-lib.org)

https://www.learningtypescript.com

# Playground 🔴
https://www.typescriptlang.org/play

 sudo chown -R $(whoami) $(npm config get prefix)/{lib/node_modules,bin,share}
 
 npm i -g typescript
 
 tsc --version
 
 > % tsc -version (2022/09)
Version 4.8.2


>$ npm bin -g

```
vim ~/.profile

export PATH=$PATH:`npm bin -g`

:wq
source ~/.profile
```


create a new tsconfig.json configuration file:

tsc --init

https://www.learningtypescript.com/from-javascript-to-typescript
```
In one terminal, start the TypeScript compiler in watch mode:

tsc --watch
In another terminal, run Jest on whichever step you're working on. For example, to run tests for the first step in watch mode:

npm test -- 1 --watch

• null; // null
• undefined; // undefined
• true; // boolean
• "Louise"; // string
• 1337; // number
• 1337n; // bigint
• Symbol("Franklin"); // symbol
https://typescriptbook.jp/reference/values-types-variables/symbol
```

https://typescriptbook.jp/tutorials/nextjs 🔴
```
export const getServerSideProps: GetServerSideProps<
  IndexPageProps
> = async () => {
  const catImage = await fetchCatImage();
  return {
    props: {
      initialCatImageUrl: catImage.url,
    },
  };
};
```

>ESLint 🔴
https://typescriptbook.jp/tutorials/eslint
```
srcディレクトリをESLintでチェックする
npx eslint src

自動修正してみましょう。
npx eslint src --fix
```


 
 

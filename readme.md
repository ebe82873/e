# To compile scource code
## Prerequists
```powershell
npm install
```

## SCSS
```powershell
cd src
npx sass --watch scss:css
```

## TS
```powershell
cd src\ts
npx tsc scripts.ts --watch --outDir ..\js
```
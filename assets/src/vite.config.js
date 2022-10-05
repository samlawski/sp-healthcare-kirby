import { resolve } from 'path'

export default () => ({
  root: './assets/src',
  build: {
    target: 'esnext',
    outDir: '../dist',
    assetsDir: '',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: resolve(process.cwd(), './assets/src/main.js'),
      // // Comment out section below to remove hash from bundle filenames:
      // output: {
      //   entryFileNames: `[name].js`,
      //   chunkFileNames: `[name].js`,
      //   assetFileNames: `[name].[ext]`
      // }
    }
  }
})
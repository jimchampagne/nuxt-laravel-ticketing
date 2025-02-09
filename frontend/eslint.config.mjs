import antfu from '@antfu/eslint-config'

export default antfu({
  vue: true,
  formatters: {
    css: true,
    html: true,
    json: true,
    markdown: 'prettier',
  },
})

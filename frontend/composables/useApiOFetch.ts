export async function useApiOFetch(
  path: string,
  options: any
) {
  const { apiBase } = useRuntimeConfig().public

  return $fetch(path, {
    baseURL: apiBase,
    ...options,
  })
}

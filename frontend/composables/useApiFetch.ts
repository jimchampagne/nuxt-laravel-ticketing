export async function useApiFetch<T>(
  path: string | (() => string),
  options?: any
) {
  const { apiBase } = useRuntimeConfig().public

  return useFetch<T>(path, {
    baseURL: apiBase,
    ...options,
  })
}

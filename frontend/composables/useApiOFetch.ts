export async function useApiOFetch(
  path: string,
  options: any,
) {
  const { apiBase } = useRuntimeConfig().public
  const token = useCookie('sanctum.token.cookie')

  return $fetch(path, {
    baseURL: apiBase,
    credentials: 'include',
    headers: {
      Authorization: token.value ? `Bearer ${token.value}` : '',
      ...options?.headers,
    },
    ...options,
  })
}

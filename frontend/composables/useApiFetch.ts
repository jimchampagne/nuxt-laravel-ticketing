import type { UseFetchOptions } from 'nuxt/app'

import { useCookie } from 'nuxt/app'

export async function useApiFetch<T>(
  path: string | (() => string),
  options?: UseFetchOptions<T>,
) {
  const { apiBase } = useRuntimeConfig().public
  const token = useCookie('sanctum.token.cookie')

  return useFetch(path, {
    baseURL: apiBase,
    credentials: 'include',
    headers: {
      Authorization: token.value ? `Bearer ${token.value}` : '',
      ...options?.headers,
    },
    ...options,
  })
}

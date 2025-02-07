export { };

declare global {
  interface Board {
    id: number
    title: string
    project_id: number
    created_at: Date
    updated_at: Date
  }
}
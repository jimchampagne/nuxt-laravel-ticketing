export { }

declare global {
  interface Ticket {
    id: number
    board_id: number
    title: string
    description: string
    status: string
    priority: number
    created_at: Date
    updated_at: Date
  }
}

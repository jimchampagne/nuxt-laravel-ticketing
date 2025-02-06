export {};

declare global {
  interface Task {
    id: number;
    title: string;
    completed: boolean
  }
}
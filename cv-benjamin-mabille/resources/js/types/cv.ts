export interface MediaItem {
    id: number;
    original_url: string;
    preview_url?: string;
}

export interface Experience {
    id: number;
    company: string;
    position: string;
    description: string;
    url: string | null;
    location: string | null;
    date_start: string;
    date_end: string | null;
    is_current: boolean;
    sort_order: number;
    media: MediaItem[];
}

export interface Diploma {
    id: number;
    school: string;
    title: string;
    specialization: string | null;
    mention: string | null;
    year_start: number;
    year_end: number;
    sort_order: number;
    media: MediaItem[];
}

export interface Skill {
    id: number;
    name: string;
    category: 'backend' | 'frontend' | 'devops' | 'soft';
    icon: string | null;
    level: number;
    sort_order: number;
}

export interface Project {
    id: number;
    title: string;
    description: string;
    url: string | null;
    technologies: string[];
    category: string | null;
    is_featured: boolean;
    sort_order: number;
    media: MediaItem[];
}

export interface Article {
    id: number;
    title: string;
    slug: string;
    excerpt: string | null;
    body: string;
    status: 'draft' | 'published';
    published_at: string | null;
    reading_time: number;
    tags: Tag[];
    media: MediaItem[];
}

export interface Tag {
    id: number;
    name: string;
    slug: string;
}

export interface Settings {
    [key: string]: string;
}

export interface HomeProps {
    settings: Settings;
    experiences: Experience[];
    diplomas: Diploma[];
    skills: Record<string, Skill[]>;
    projects: Project[];
    latestArticles: Article[];
}

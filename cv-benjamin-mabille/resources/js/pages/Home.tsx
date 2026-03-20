import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/AppLayout';
import Hero from '@/components/sections/Hero';
import Timeline from '@/components/sections/Timeline';
import Education from '@/components/sections/Education';
import SkillGrid from '@/components/sections/SkillGrid';
import ProjectBento from '@/components/sections/ProjectBento';
import type { HomeProps } from '@/types/cv';

export default function Home({ settings, experiences, diplomas, skills, projects }: HomeProps) {
    return (
        <AppLayout settings={settings}>
            <Head title="Benjamin Mabille — Développeur PHP Full Stack" />

            <Hero settings={settings} />

            <div id="experiences">
                <Timeline experiences={experiences} />
            </div>

            <div id="education">
                <Education diplomas={diplomas} />
            </div>

            <div id="skills">
                <SkillGrid skills={skills} />
            </div>

            <div id="projects">
                <ProjectBento projects={projects} />
            </div>
        </AppLayout>
    );
}

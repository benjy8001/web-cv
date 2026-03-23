import { useTranslation } from 'react-i18next';
import { motion } from 'framer-motion';
import { useInView } from 'react-intersection-observer';
import type { Skill } from '@/types/cv';

interface Props {
    skills: Record<string, Skill[]>;
}

const categoryStyles: Record<string, { border: string; bg: string; glow: string; text: string }> = {
    backend: {
        border: 'border-violet-500/20',
        bg: 'bg-violet-500/5',
        glow: 'hover:shadow-[0_0_15px_rgba(139,92,246,0.15)]',
        text: 'text-violet-400',
    },
    frontend: {
        border: 'border-cyan-500/20',
        bg: 'bg-cyan-500/5',
        glow: 'hover:shadow-[0_0_15px_rgba(6,182,212,0.15)]',
        text: 'text-cyan-400',
    },
    devops: {
        border: 'border-amber-500/20',
        bg: 'bg-amber-500/5',
        glow: 'hover:shadow-[0_0_15px_rgba(245,158,11,0.15)]',
        text: 'text-amber-400',
    },
    soft: {
        border: 'border-pink-500/20',
        bg: 'bg-pink-500/5',
        glow: 'hover:shadow-[0_0_15px_rgba(236,72,153,0.15)]',
        text: 'text-pink-400',
    },
};

const defaultStyle = categoryStyles.backend;

function CategoryGroup({ category, skills, index }: { category: string; skills: Skill[]; index: number }) {
    const { t } = useTranslation();
    const [ref, inView] = useInView({ triggerOnce: true, threshold: 0.2 });
    const style = categoryStyles[category] ?? defaultStyle;

    return (
        <motion.div
            ref={ref}
            initial={{ opacity: 0, y: 30 }}
            animate={inView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.5, delay: index * 0.15 }}
        >
            <h3 className={`mb-4 text-lg font-semibold ${style.text}`}>
                {t(`skills.${category}`)}
            </h3>
            <div className="flex flex-wrap gap-2">
                {skills.map((skill, i) => (
                    <motion.span
                        key={skill.id}
                        initial={{ opacity: 0, scale: 0.8 }}
                        animate={inView ? { opacity: 1, scale: 1 } : {}}
                        transition={{ duration: 0.3, delay: index * 0.15 + i * 0.03 }}
                        className={`inline-flex items-center gap-2 rounded-full border px-3 py-1.5 text-sm transition-all ${style.border} ${style.bg} ${style.glow} text-white/80 hover:text-white`}
                    >
                        {skill.icon && <i className={skill.icon} />}
                        {skill.name}
                    </motion.span>
                ))}
            </div>
        </motion.div>
    );
}

export default function SkillGrid({ skills }: Props) {
    const { t } = useTranslation();
    const categories = Object.keys(skills);

    return (
        <section className="relative py-24 px-6">
            <div className="mx-auto max-w-5xl">
                <h2 className="mb-16 text-center text-3xl font-bold sm:text-4xl">
                    <span className="bg-gradient-to-r from-violet-400 via-cyan-400 to-pink-400 bg-clip-text text-transparent">
                        {t('sections.skills')}
                    </span>
                    <span className="mx-auto mt-2 block h-1 w-16 rounded-full bg-gradient-to-r from-violet-500 via-cyan-500 to-pink-500" />
                </h2>

                <div className="grid gap-10 sm:grid-cols-2">
                    {categories.map((cat, i) => (
                        <CategoryGroup key={cat} category={cat} skills={skills[cat]} index={i} />
                    ))}
                </div>
            </div>
        </section>
    );
}

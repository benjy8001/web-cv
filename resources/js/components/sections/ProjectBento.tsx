import { useState, useEffect, type MouseEvent, useCallback, useRef } from 'react';
import { useTranslation } from 'react-i18next';
import { motion, AnimatePresence } from 'framer-motion';
import { useInView } from 'react-intersection-observer';
import { IconExternalLink, IconZoomIn, IconX } from '@tabler/icons-react';
import type { Project } from '@/types/cv';

interface Props {
    projects: Project[];
}

interface SelectedImage {
    url: string;
    title: string;
}

function ProjectCard({
    project,
    index,
    onImageClick,
}: {
    project: Project;
    index: number;
    onImageClick: (image: SelectedImage) => void;
}) {
    const [ref, inView] = useInView({ triggerOnce: true, threshold: 0.1 });
    const cardRef = useRef<HTMLDivElement>(null);

    const thumbnail = project.media?.[0]?.original_url;

    const handleMouseMove = useCallback((e: MouseEvent<HTMLDivElement>) => {
        const card = cardRef.current;
        if (!card) return;
        const rect = card.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        card.style.transform = `perspective(800px) rotateY(${x * 6}deg) rotateX(${-y * 6}deg)`;
    }, []);

    const handleMouseLeave = useCallback(() => {
        const card = cardRef.current;
        if (card) {
            card.style.transform = 'perspective(800px) rotateY(0deg) rotateX(0deg)';
        }
    }, []);

    const isLarge = index === 0 || index === 3;

    return (
        <motion.div
            ref={ref}
            initial={{ opacity: 0, y: 40 }}
            animate={inView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.5, delay: index * 0.1 }}
            className={isLarge ? 'sm:col-span-2' : ''}
        >
            <div
                ref={cardRef}
                onMouseMove={handleMouseMove}
                onMouseLeave={handleMouseLeave}
                className="group relative h-full overflow-hidden rounded-xl border border-white/5 bg-white/[0.02] transition-all duration-300 hover:border-violet-500/30 hover:shadow-[0_0_40px_rgba(139,92,246,0.1),0_0_40px_rgba(6,182,212,0.05)]"
                style={{ transition: 'transform 0.15s ease-out, border-color 0.3s, box-shadow 0.3s' }}
            >
                {thumbnail && (
                    <button
                        type="button"
                        onClick={() => onImageClick({ url: thumbnail, title: project.title })}
                        className="relative aspect-video w-full cursor-zoom-in overflow-hidden"
                    >
                        <img
                            src={thumbnail}
                            alt={project.title}
                            className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                        />
                        <div className="absolute inset-0 flex items-center justify-center bg-black/0 transition-colors duration-300 group-hover:bg-black/30">
                            <IconZoomIn
                                size={32}
                                className="scale-75 text-white opacity-0 transition-all duration-300 group-hover:scale-100 group-hover:opacity-100"
                            />
                        </div>
                    </button>
                )}

                <div className="p-5">
                    <div className="mb-2 flex items-center justify-between">
                        <h3 className="text-lg font-semibold text-white">{project.title}</h3>
                        {project.url && (
                            <a
                                href={project.url}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="text-white/30 transition-colors hover:text-violet-400"
                            >
                                <IconExternalLink size={18} />
                            </a>
                        )}
                    </div>

                    {project.description && (
                        <div
                            className="prose-sm mb-3 text-sm leading-relaxed text-white/50 [&_p]:mb-1"
                            dangerouslySetInnerHTML={{ __html: project.description }}
                        />
                    )}

                    {project.technologies.length > 0 && (
                        <div className="flex flex-wrap gap-1.5">
                            {project.technologies.map((tech) => (
                                <span
                                    key={tech}
                                    className="rounded-full border border-white/10 bg-white/5 px-2 py-0.5 text-xs text-white/40"
                                >
                                    {tech}
                                </span>
                            ))}
                        </div>
                    )}
                </div>
            </div>
        </motion.div>
    );
}

export default function ProjectBento({ projects }: Props) {
    const { t } = useTranslation();
    const [selectedImage, setSelectedImage] = useState<SelectedImage | null>(null);

    useEffect(() => {
        const handler = (e: KeyboardEvent) => {
            if (e.key === 'Escape') setSelectedImage(null);
        };
        window.addEventListener('keydown', handler);
        return () => window.removeEventListener('keydown', handler);
    }, []);

    return (
        <section className="relative py-24 px-6">
            <div className="mx-auto max-w-5xl">
                <h2 className="mb-16 text-center text-3xl font-bold sm:text-4xl">
                    <span className="bg-gradient-to-r from-pink-400 to-violet-400 bg-clip-text text-transparent">
                        {t('sections.projects')}
                    </span>
                    <span className="mx-auto mt-2 block h-1 w-16 rounded-full bg-gradient-to-r from-pink-500 to-violet-500" />
                </h2>

                <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    {projects.map((project, i) => (
                        <ProjectCard
                            key={project.id}
                            project={project}
                            index={i}
                            onImageClick={setSelectedImage}
                        />
                    ))}
                </div>
            </div>

            <AnimatePresence>
                {selectedImage && (
                    <motion.div
                        className="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm"
                        initial={{ opacity: 0 }}
                        animate={{ opacity: 1 }}
                        exit={{ opacity: 0 }}
                        onClick={() => setSelectedImage(null)}
                    >
                        <motion.div
                            className="relative"
                            initial={{ scale: 0.85, opacity: 0 }}
                            animate={{ scale: 1, opacity: 1 }}
                            exit={{ scale: 0.85, opacity: 0 }}
                            transition={{ type: 'spring', damping: 25, stiffness: 300 }}
                            onClick={(e) => e.stopPropagation()}
                        >
                            <img
                                src={selectedImage.url}
                                alt={selectedImage.title}
                                className="max-h-[85vh] max-w-[90vw] rounded-xl object-contain shadow-2xl"
                            />
                            <p className="mt-2 text-center text-sm text-white/60">{selectedImage.title}</p>
                            <button
                                type="button"
                                onClick={() => setSelectedImage(null)}
                                className="absolute -top-3 -right-3 rounded-full bg-white/10 p-1.5 text-white transition-colors hover:bg-white/20"
                            >
                                <IconX size={16} />
                            </button>
                        </motion.div>
                    </motion.div>
                )}
            </AnimatePresence>
        </section>
    );
}

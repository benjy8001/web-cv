import { useTranslation } from 'react-i18next';
import { motion } from 'framer-motion';
import { useInView } from 'react-intersection-observer';
import type { Experience } from '@/types/cv';

interface Props {
    experiences: Experience[];
}

function formatDate(date: string, locale: string): string {
    return new Date(date).toLocaleDateString(locale === 'en' ? 'en-US' : 'fr-FR', {
        month: 'short',
        year: 'numeric',
    });
}

function TimelineCard({ experience, index }: { experience: Experience; index: number }) {
    const { t, i18n } = useTranslation();
    const [ref, inView] = useInView({ triggerOnce: true, threshold: 0.2 });
    const isLeft = index % 2 === 0;

    const logo = experience.media?.[0]?.original_url;

    return (
        <div ref={ref} className="relative grid grid-cols-1 gap-4 md:grid-cols-[1fr_auto_1fr]">
            <div className={`hidden md:block ${isLeft ? '' : 'order-3'}`}>
                {isLeft && (
                    <motion.div
                        initial={{ opacity: 0, x: -40 }}
                        animate={inView ? { opacity: 1, x: 0 } : {}}
                        transition={{ duration: 0.5, delay: index * 0.1 }}
                    >
                        <Card experience={experience} logo={logo} t={t} lang={i18n.language} />
                    </motion.div>
                )}
            </div>

            <div className="relative flex justify-center">
                <div className="relative z-10 flex h-4 w-4 items-center justify-center">
                    <span className="absolute h-4 w-4 rounded-full bg-violet-500/40 blur-sm" />
                    <span className="relative h-2.5 w-2.5 rounded-full bg-violet-400" />
                </div>
            </div>

            <div className={`hidden md:block ${isLeft ? 'order-3' : ''}`}>
                {!isLeft && (
                    <motion.div
                        initial={{ opacity: 0, x: 40 }}
                        animate={inView ? { opacity: 1, x: 0 } : {}}
                        transition={{ duration: 0.5, delay: index * 0.1 }}
                    >
                        <Card experience={experience} logo={logo} t={t} lang={i18n.language} />
                    </motion.div>
                )}
            </div>

            <div className="md:hidden">
                <motion.div
                    initial={{ opacity: 0, x: -30 }}
                    animate={inView ? { opacity: 1, x: 0 } : {}}
                    transition={{ duration: 0.5, delay: index * 0.1 }}
                >
                    <Card experience={experience} logo={logo} t={t} lang={i18n.language} />
                </motion.div>
            </div>
        </div>
    );
}

function Card({
    experience,
    logo,
    t,
    lang,
}: {
    experience: Experience;
    logo?: string;
    t: (key: string) => string;
    lang: string;
}) {
    const dateStart = formatDate(experience.date_start, lang);
    const dateEnd = experience.is_current
        ? t('timeline.present')
        : experience.date_end
          ? formatDate(experience.date_end, lang)
          : '';

    return (
        <div className="group rounded-xl border border-white/5 bg-white/[0.02] p-5 transition-all hover:border-violet-500/20 hover:bg-white/[0.04]">
            <div className="mb-3 flex items-center gap-3">
                {logo && (
                    <img
                        src={logo}
                        alt={experience.company}
                        className="h-10 w-10 rounded-lg object-contain"
                    />
                )}
                <div>
                    <h3 className="font-semibold text-white">{experience.company}</h3>
                    <p className="text-sm text-violet-400">{experience.position}</p>
                </div>
            </div>

            <div className="mb-3 flex flex-wrap items-center gap-2 text-xs text-white/40">
                <span>
                    {dateStart} — {dateEnd}
                </span>
                {experience.is_current && (
                    <span className="rounded-full bg-green-500/10 px-2 py-0.5 text-green-400">
                        {t('timeline.present')}
                    </span>
                )}
                {experience.location && <span>· {experience.location}</span>}
            </div>

            {experience.description && (
                <div
                    className="prose prose-sm prose-invert max-w-none text-white/50"
                    dangerouslySetInnerHTML={{ __html: experience.description }}
                />
            )}
        </div>
    );
}

export default function Timeline({ experiences }: Props) {
    const { t } = useTranslation();

    return (
        <section className="relative py-24 px-6">
            <div className="mx-auto max-w-5xl">
                <h2 className="mb-16 text-center text-3xl font-bold sm:text-4xl">
                    <span className="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-transparent">
                        {t('sections.experiences')}
                    </span>
                    <span className="mx-auto mt-2 block h-1 w-16 rounded-full bg-gradient-to-r from-violet-500 to-cyan-500" />
                </h2>

                <div className="relative">
                    <div className="absolute left-1/2 top-0 hidden h-full w-px -translate-x-1/2 bg-gradient-to-b from-violet-500/40 via-cyan-500/20 to-transparent md:block" />
                    <div className="absolute left-[7px] top-0 h-full w-px bg-gradient-to-b from-violet-500/40 via-cyan-500/20 to-transparent md:hidden" />

                    <div className="flex flex-col gap-12">
                        {experiences.map((exp, i) => (
                            <TimelineCard key={exp.id} experience={exp} index={i} />
                        ))}
                    </div>
                </div>
            </div>
        </section>
    );
}

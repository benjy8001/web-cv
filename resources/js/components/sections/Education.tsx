import { useTranslation } from 'react-i18next';
import { motion } from 'framer-motion';
import { useInView } from 'react-intersection-observer';
import type { Diploma } from '@/types/cv';

interface Props {
    diplomas: Diploma[];
}

function DiplomaCard({ diploma, index }: { diploma: Diploma; index: number }) {
    const [ref, inView] = useInView({ triggerOnce: true, threshold: 0.2 });
    const logo = diploma.media?.[0]?.original_url;

    return (
        <motion.div
            ref={ref}
            initial={{ opacity: 0, y: 30 }}
            animate={inView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.5, delay: index * 0.1 }}
            className="group rounded-xl border border-white/5 bg-white/[0.02] p-6 transition-all hover:border-cyan-500/20 hover:bg-white/[0.04] hover:shadow-[0_0_30px_rgba(6,182,212,0.05)]"
        >
            <div className="flex items-start gap-4">
                {logo && (
                    <img
                        src={logo}
                        alt={diploma.school}
                        className="h-12 w-12 rounded-lg object-contain"
                    />
                )}
                <div className="flex-1">
                    <h3 className="text-lg font-semibold text-white">{diploma.title}</h3>
                    <p className="text-sm text-cyan-400">{diploma.school}</p>
                    {diploma.specialization && (
                        <p className="mt-1 text-sm text-white/40">{diploma.specialization}</p>
                    )}
                    <div className="mt-2 flex items-center gap-3 text-xs text-white/30">
                        <span>
                            {diploma.year_start} — {diploma.year_end}
                        </span>
                        {diploma.mention && (
                            <span className="rounded-full bg-violet-500/10 px-2 py-0.5 text-violet-400">
                                {diploma.mention}
                            </span>
                        )}
                    </div>
                </div>
            </div>
        </motion.div>
    );
}

export default function Education({ diplomas }: Props) {
    const { t } = useTranslation();

    return (
        <section className="relative py-24 px-6">
            <div className="mx-auto max-w-3xl">
                <h2 className="mb-16 text-center text-3xl font-bold sm:text-4xl">
                    <span className="bg-gradient-to-r from-cyan-400 to-violet-400 bg-clip-text text-transparent">
                        {t('sections.education')}
                    </span>
                    <span className="mx-auto mt-2 block h-1 w-16 rounded-full bg-gradient-to-r from-cyan-500 to-violet-500" />
                </h2>

                <div className="flex flex-col gap-4">
                    {diplomas.map((diploma, i) => (
                        <DiplomaCard key={diploma.id} diploma={diploma} index={i} />
                    ))}
                </div>
            </div>
        </section>
    );
}

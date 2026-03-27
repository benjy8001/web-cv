import { Head, useForm, usePage } from '@inertiajs/react';
import { type FormEvent } from 'react';
import { useTranslation } from 'react-i18next';
import { motion } from 'framer-motion';
import { IconBrandGithub, IconBrandLinkedin, IconMail, IconMapPin, IconPhone, IconSend } from '@tabler/icons-react';
import AppLayout from '@/layouts/AppLayout';
import type { Settings } from '@/types/cv';

export default function Contact() {
    const { t } = useTranslation();
    const props = usePage().props as unknown as {
        settings: Settings;
        flash?: { success?: string };
    };
    const { settings, flash } = props;

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        subject: '',
        message: '',
    });

    const submit = (e: FormEvent) => {
        e.preventDefault();
        post('/contact', {
            onSuccess: () => reset(),
        });
    };

    const inputClasses =
        'w-full rounded-lg border border-white/10 bg-white/[0.03] px-4 py-3 text-sm text-white placeholder-white/20 outline-none transition-all focus:border-violet-500/50 focus:ring-2 focus:ring-violet-500/20';

    return (
        <AppLayout settings={settings}>
            <Head title="Contact" />

            <section className="relative min-h-screen px-6 pt-32 pb-24">
                <div className="mx-auto max-w-4xl">
                    <motion.div
                        initial={{ opacity: 0, y: 30 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.6 }}
                        className="mb-12 text-center"
                    >
                        <h1 className="mb-4 text-4xl font-bold sm:text-5xl">
                            <span className="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-transparent">
                                {t('contact.title')}
                            </span>
                        </h1>
                        <p className="text-white/50">{t('contact.subtitle')}</p>
                    </motion.div>

                    <div className="grid gap-12 lg:grid-cols-[1fr_auto]">
                        <motion.form
                            onSubmit={submit}
                            initial={{ opacity: 0, y: 20 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.6, delay: 0.2 }}
                            className="space-y-5"
                        >
                            {flash?.success && (
                                <div className="rounded-lg border border-green-500/30 bg-green-500/10 px-4 py-3 text-sm text-green-400">
                                    {flash.success}
                                </div>
                            )}

                            <div>
                                <label className="mb-1.5 block text-sm text-white/60">
                                    {t('contact.name')}
                                </label>
                                <input
                                    type="text"
                                    value={data.name}
                                    onChange={(e) => setData('name', e.target.value)}
                                    placeholder={t('contact.namePlaceholder')}
                                    className={inputClasses}
                                />
                                {errors.name && (
                                    <p className="mt-1 text-xs text-red-400">{errors.name}</p>
                                )}
                            </div>

                            <div>
                                <label className="mb-1.5 block text-sm text-white/60">
                                    {t('contact.email')}
                                </label>
                                <input
                                    type="email"
                                    value={data.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    placeholder={t('contact.emailPlaceholder')}
                                    className={inputClasses}
                                />
                                {errors.email && (
                                    <p className="mt-1 text-xs text-red-400">{errors.email}</p>
                                )}
                            </div>

                            <div>
                                <label className="mb-1.5 block text-sm text-white/60">
                                    {t('contact.subject')}
                                </label>
                                <input
                                    type="text"
                                    value={data.subject}
                                    onChange={(e) => setData('subject', e.target.value)}
                                    placeholder={t('contact.subjectPlaceholder')}
                                    className={inputClasses}
                                />
                                {errors.subject && (
                                    <p className="mt-1 text-xs text-red-400">{errors.subject}</p>
                                )}
                            </div>

                            <div>
                                <label className="mb-1.5 block text-sm text-white/60">
                                    {t('contact.message')}
                                </label>
                                <textarea
                                    value={data.message}
                                    onChange={(e) => setData('message', e.target.value)}
                                    placeholder={t('contact.messagePlaceholder')}
                                    rows={6}
                                    className={inputClasses + ' resize-none'}
                                />
                                {errors.message && (
                                    <p className="mt-1 text-xs text-red-400">{errors.message}</p>
                                )}
                            </div>

                            <button
                                type="submit"
                                disabled={processing}
                                className="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-violet-600 to-cyan-600 px-6 py-3 text-sm font-medium text-white transition-all hover:from-violet-500 hover:to-cyan-500 hover:shadow-[0_0_20px_rgba(139,92,246,0.3)] disabled:opacity-50"
                            >
                                <IconSend size={16} />
                                {t('contact.send')}
                            </button>
                        </motion.form>

                        <motion.div
                            initial={{ opacity: 0, y: 20 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.6, delay: 0.4 }}
                            className="space-y-6"
                        >
                            {settings.email && (
                                <a
                                    href={`mailto:${settings.email}`}
                                    className="flex items-center gap-3 text-white/50 transition-colors hover:text-violet-400"
                                >
                                    <div className="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/[0.03]">
                                        <IconMail size={18} />
                                    </div>
                                    <span className="text-sm">{settings.email}</span>
                                </a>
                            )}
                            {settings.phone && (
                                <a
                                    href={`tel:${settings.phone}`}
                                    className="flex items-center gap-3 text-white/50 transition-colors hover:text-violet-400"
                                >
                                    <div className="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/[0.03]">
                                        <IconPhone size={18} />
                                    </div>
                                    <span className="text-sm">{settings.phone}</span>
                                </a>
                            )}
                            {settings.address && (
                                <div className="flex items-center gap-3 text-white/50">
                                    <div className="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-white/10 bg-white/[0.03]">
                                        <IconMapPin size={18} />
                                    </div>
                                    <span className="text-sm">{settings.address}</span>
                                </div>
                            )}
                            {settings.linkedin && (
                                <a
                                    href={settings.linkedin}
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    className="flex items-center gap-3 text-white/50 transition-colors hover:text-violet-400"
                                >
                                    <div className="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/[0.03]">
                                        <IconBrandLinkedin size={18} />
                                    </div>
                                    <span className="text-sm">LinkedIn</span>
                                </a>
                            )}
                            {settings.github && (
                                <a
                                    href={settings.github}
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    className="flex items-center gap-3 text-white/50 transition-colors hover:text-violet-400"
                                >
                                    <div className="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/[0.03]">
                                        <IconBrandGithub size={18} />
                                    </div>
                                    <span className="text-sm">GitHub</span>
                                </a>
                            )}
                        </motion.div>
                    </div>
                </div>
            </section>
        </AppLayout>
    );
}

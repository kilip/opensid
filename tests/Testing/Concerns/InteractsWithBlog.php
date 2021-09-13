<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\OpenSID\Testing\Concerns;

use Doctrine\Persistence\ObjectRepository;
use Faker\Factory as FakerFactory;
use OpenSID\Application\Contracts\UserInterface;
use OpenSID\Blog\DataPersister\ArtikelPersister;
use OpenSID\Blog\DataPersister\KategoriPersister;
use OpenSID\Blog\Model\Artikel;
use OpenSID\Blog\Model\Kategori;

trait InteractsWithBlog
{
    use InteractsWithDoctrine;
    use InteractsWithUser;

    /**
     * @Given saya memiliki kategori :kategori
     */
    public function sayaMemilikiKategori(string $nama = 'Berita Desa'): Kategori
    {
        $repo     = $this->getKategoriRepository();
        $kategori = $repo->findOneBy(['nama' => $nama]);

        if (null === $kategori) {
            $kategori = new Kategori();
            $kategori->setNama($nama);
            $this->getKategoriPersister()->persist($kategori);
        }

        return $kategori;
    }

    /**
     * @Given saya tidak memiliki artikel yang berjudul :judul
     */
    public function sayaTidakMemilikiArtikel(string $judul)
    {
        $repo    = $this->getArtikelRepository();
        $artikel = $repo->findOneBy([
            'judul' => $judul,
        ]);

        if (null !== $artikel) {
            $this->getArtikelPersister()->remove($artikel);
        }
    }

    /**
     * @Given saya memiliki artikel yang berjudul :judul
     */
    public function sayaMemilikiArtikelBerjudul(string $judul): Artikel
    {
        $repo    = $this->getArtikelRepository();
        $artikel = $repo->findOneBy([
            'judul' => $judul,
        ]);

        if (null === $artikel) {
            $faker    = FakerFactory::create('id');
            $user     = $this->iHaveUser('admin', 'admin@example.com', UserInterface::ROLE_ADMIN);
            $kategori = $this->sayaMemilikiKategori();
            $artikel  = new Artikel();

            $artikel->setJudul($judul);
            $artikel->setIsi($faker->paragraphs(2, true));
            $artikel->setUser($user);
            $artikel->setKategori($kategori);

            $this->getArtikelPersister()->persist($artikel);
        }

        return $artikel;
    }

    protected function getKategoriPersister(): KategoriPersister
    {
        return static::getContainer()->get('opensid.blog.persister.kategori');
    }

    protected function getArtikelPersister(): ArtikelPersister
    {
        return static::getContainer()->get('opensid.blog.persister.artikel');
    }

    protected function getKategoriRepository(): ObjectRepository
    {
        return $this->getManager()->getRepository(Kategori::class);
    }

    public function getArtikelRepository()
    {
        return $this->getManager()->getRepository(Artikel::class);
    }
}

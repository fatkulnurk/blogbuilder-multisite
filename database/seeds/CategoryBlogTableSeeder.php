<?php

use Illuminate\Database\Seeder;
use App\Model\CategoryBlog;

class CategoryBlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryBlog::create([
            'name'  => 'Arts & Entertainment',
            'description' => 'Art, Beauty, Books, Comics, Culture, Fiction, Film, Food, Gaming, Humor, Music, Photography, Podcasts, Poetry, Social Media, Sports, Style, True Crime, Tv, Writing, and so forth'
        ]);

        CategoryBlog::create([
            'name'  => 'Industry',
            'description' => 'Business, Design, Economy, Freelancing, Leardership, Marketing, Product Management, Productivity, Startups, Venture Capital, Work, and so forth'
        ]);

        CategoryBlog::create([
            'name'  => 'Innovation & Tech',
            'description' => 'Accessibility, Android Dev, Artificial Intelligence, Blockchain, Cryptocurrency, Cybersecurity, Data Science, Digital Life, Gadgets, Ios Dev, Javascript, Machine Learning, Math, Neuroscience, Programming, Science, Self-Driving cars, Software Engineer, Space, Technology, Ux, Visual Design, and so forth.'
        ]);

        CategoryBlog::create([
            'name'  => 'Life',
            'description' => 'Addiction, Cannabis, Creativity, Disability, Family, Health, Lifetyle, Mental Health, Minfulness, Money, Parenting, Pets, Psychedelics, pscyology, Relationships, Self, Sexuality, Spirituality, Travel, and so forth.'
        ]);

        CategoryBlog::create([
            'name'  => 'Society',
            'description' => 'Basic Income, Cities, Education, Election, Environment, Equality, Future, Gun Control, History, Immigration, Justice, Language, Media, Philosophy, politics, Privacy, Race, Religion, Transportation, Women, Word, and so forth.'
        ]);

        CategoryBlog::create([
            'name'  => 'Others',
            'description' => 'Choose this if you are confused.'
        ]);
    }
}

<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\News;

class NewsController {

	public function actionIndex()
	{
		
		$newsList = array();
		$newsList = News::getNewsList();

		require_once(ROOT . '/application/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id);
			require_once(ROOT . '/application/views/news/view.php');
		}

		return true;

	}

}


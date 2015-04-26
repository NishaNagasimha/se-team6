import scrapy

class UnivlistItem(scrapy.Item):
	title = scrapy.Field()
	link = scrapy.Field()

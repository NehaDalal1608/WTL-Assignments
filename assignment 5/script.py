from lxml import etree

# Load XML from a file
with open("books.xml", "r", encoding="utf-8") as file:
    xml_content = file.read()

# Parse the XML data
root = etree.fromstring(xml_content)

# Extract book titles
titles = root.xpath("//book/title/text()")

# Extract book authors
authors = root.xpath("//book/author/text()")

# Extract prices
prices = [float(price) for price in root.xpath("//book/price/text()")]

# Extract books with a specific category
data_science_books = root.xpath("//book[@category='Data Science']/title/text()")

# Print Results
print("Book Titles:", titles)
print("Authors:", authors)
print("Prices:", prices)
print("Data Science Books:", data_science_books)

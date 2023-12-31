CREATE TABLE ConstructionSupply (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(100),
    Category VARCHAR(50),
    CurrentStock VARCHAR(50),
    RecordLevel VARCHAR(50),
    UnitPrice INT,
    Brand VARCHAR(50)
);

INSERT INTO constructionsupply (ProductName, Category, CurrentStock, RecordLevel, UnitPrice, Brand)
VALUES
    ('Cement', 'Building', '1500 bags', '100 bags', 6000, 'Bajaj'),
    ('Bricks', 'Building', '5000 pieces', '1000 pieces', 250, 'Union'),
    ('Paint', 'Finishing', '300 gallons', '50 gallons', 150, 'Asian'),
    ('Nails', 'Hardware', '10000 pieces', '1000 pieces', 12, 'Hindustan'),
    ('Plywood', 'Building', '20000 Sheets', '100 Sheets', 600, 'Relay'),
    ('Concrete mix', 'Building', '200 Bags', '20 Bags', 1500, 'Bajaj'),
    ('Rooimport mysql.connector fing Shingles', 'Roofing', '800 Bundle', '100 Bundle', 2100, 'Relay'),
    ('Insulation', 'Insulation', '800 Bundle', '100 Bundle', 1400, 'Hyper'),
    ('Plumbing Fixture', 'Plumbing', '300 Units', '40 Units', 2300, 'Olx'),
    ('Electrical Wire', 'Electrical', '1000 Feet', '200 Feet', 400, 'Birla'),
    ('Screws', 'Hardware', '8000 pieces', '500 pieces', 8, 'Hindustan'),
    ('Lumber', 'Building', '500 pieces', '50 pieces', 450, 'Relay'),
    ('Plaster', 'Finishing', '150 bags', '20 bags', 300, 'Bajaj'),
    ('Roofing Nails', 'Roofing', '3000 pieces', '200 pieces', 15, 'Union'),
    ('Tiles', 'Building', '1000 pieces', '100 pieces', 30, 'Hyper'),
    ('Wiring Accessories', 'Electrical', '500 units', '50 units', 120, 'Birla'),
    ('Drainage Pipes', 'Plumbing', '400 meters', '30 meters', 180, 'Olx'),
    ('Safety Gear', 'Safety', '200 sets', '20 sets', 80, 'Relay'),
    ('Insulation Foam', 'Insulation', '1000 sheets', '100 sheets', 800, 'Asian'),
    ('Circuit Breakers', 'Electrical', '100 units', '10 units', 300, 'Birla'),
    ('Concrete Blocks', 'Building', '800 pieces', '100 pieces', 180, 'Union'),
    ('PVC Pipes', 'Plumbing', '1500 meters', '200 meters', 25, 'Olx'),
    ('Sanding Paper', 'Finishing', '500 sheets', '50 sheets', 5, 'Hyper'),
    ('Hand Tools Set', 'Tools', '100 sets', '10 sets', 350, 'Bajaj'),
    ('Paint Brushes', 'Painting', '120 pieces', '20 pieces', 10, 'Relay'),
    ('Welding Rods', 'Welding', '300 pieces', '30 pieces', 20, 'Hindustan'),
    ('Caulking Gun', 'Tools', '50 units', '5 units', 40, 'Union'),
    ('Fire Extinguisher', 'Safety', '30 units', '3 units', 200, 'Asian'),
    ('Grout', 'Finishing', '80 bags', '10 bags', 15, 'Hyper'),
    ('Electrical Outlets', 'Electrical', '500 units', '50 units', 8, 'Birla'),
    ('Steel Rebar', 'Building', '400 pieces', '50 pieces', 120, 'Relay'),
    ('Plywood Adhesive', 'Adhesives', '200 liters', '20 liters', 50, 'Bajaj'),
    ('Angle Grinder', 'Tools', '40 units', '5 units', 300, 'Olx'),
    ('Brick Trowel', 'Tools', '60 units', '10 units', 15, 'Hindustan'),
    ('Cement Mixer', 'Tools', '20 units', '2 units', 800, 'Relay'),
    ('Duct Tape', 'Adhesives', '300 rolls', '30 rolls', 2, 'Union'),
    ('Plumbing Fittings', 'Plumbing', '800 pieces', '100 pieces', 50, 'Olx'),
    ('Safety Helmets', 'Safety', '100 units', '10 units', 30, 'Asian'),
    ('Ceramic Tiles', 'Building', '600 pieces', '60 pieces', 20, 'Relay'),
    ('Wire Cutters', 'Tools', '150 units', '15 units', 15, 'Hindustan'),
    ('Safety Goggles', 'Safety', '250 units', '25 units', 10, 'Asian'),
    ('Ladders', 'Tools', '50 units', '5 units', 150, 'Relay'),
    ('Pipe Insulation', 'Insulation', '400 meters', '40 meters', 8, 'Hyper'),
    ('Adhesive Caulk', 'Adhesives', '100 tubes', '10 tubes', 5, 'Olx'),
    ('Hammer Drill', 'Tools', '30 units', '3 units', 180, 'Bajaj'),
    ('Plastering Trowel', 'Tools', '80 units', '8 units', 25, 'Hindustan'),
    ('Extension Cords', 'Electrical', '200 units', '20 units', 20, 'Union'),
    ('Wood Glue', 'Adhesives', '150 liters', '15 liters', 6, 'Relay'),
    ('Soldering Iron', 'Tools', '40 units', '4 units', 30, 'Birla'),
    ('Acoustic Panels', 'Acoustics', '100 panels', '10 panels', 50, 'Relay'),
    ('Concrete Sealer', 'Finishing', '120 liters', '12 liters', 18, 'Hyper'),
    ('Screwdrivers Set', 'Tools', '500 sets', '50 sets', 15, 'Hindustan'),
    ('Paint Rollers', 'Painting', '300 pieces', '30 pieces', 8, 'Bajaj'),
    ('Drill Bits Set', 'Tools', '200 sets', '20 sets', 12, 'Union'),
    ('Roofing Tar', 'Roofing', '50 gallons', '5 gallons', 30, 'Relay'),
    ('PVC Fittings', 'Plumbing', '400 pieces', '40 pieces', 6, 'Olx'),
    ('Tape Measures', 'Tools', '250 units', '25 units', 5, 'Hindustan'),
    ('Concrete Stain', 'Finishing', '60 liters', '6 liters', 22, 'Asian'),
    ('Gypsum Board', 'Building', '150 sheets', '15 sheets', 10, 'Relay'),
    ('Plumbing Snake', 'Plumbing', '30 units', '3 units', 25, 'Olx');
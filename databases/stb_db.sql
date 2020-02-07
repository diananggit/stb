CREATE TABLE stb_db.dbo.dt_machine (
	id_machine int IDENTITY(1,1) NOT NULL,
	machine_name varchar(20) NOT NULL,
	shift int NOT NULL,
	booking_time datetime,
	time datetime,
	style varchar(90) NOT NULL,
	orc varchar(90) NOT NULL,
	size int NOT NULL,
	good_quality int NOT NULL,
	measurement int NOT NULL,
	missing_part int NOT NULL,
	stictching int NOT NULL,
	PRIMARY KEY (id_machine)
)
GO
CREATE TABLE stb_db.dbo.dt_machine_description (
	DESC_MACHINE_ID int IDENTITY(1,1) NOT NULL,
	DESCRIPTION varchar(50) NOT NULL,
	PRIMARY KEY (DESC_MACHINE_ID)
)
GO
CREATE TABLE stb_db.dbo.Event (
	ID int IDENTITY(1,1) NOT NULL,
	Mesin varchar(50),
	Waktu datetime,
	Detik datetime,
	EventID int
)
GO
CREATE TABLE stb_db.dbo.EventDefinisi (
	ID tinyint NOT NULL,
	Keterangan varchar(50)
)
GO
CREATE TABLE stb_db.dbo.g_groups (
	GROUP_ID int IDENTITY(1,1) NOT NULL,
	GROUP_NAME varchar(20) NOT NULL,
	DESCRIPTION varchar(50) DEFAULT (NULL),
	PRIMARY KEY (GROUP_ID)
)
GO
CREATE TABLE stb_db.dbo.g_users (
	U_ID int IDENTITY(1,1) NOT NULL,
	GROUP_ID int NOT NULL,
	USERNAME varchar(50) NOT NULL,
	PASSWORD varchar(200) NOT NULL,
	CREATED_BY varchar(20) NOT NULL,
	CREATED_DATE datetime NOT NULL,
	MODIFIED_DATE datetime NOT NULL,
	PRIMARY KEY (U_ID)
)
GO
CREATE TABLE stb_db.dbo.Produksi (
	ID int IDENTITY(1,1) NOT NULL,
	Mesin varchar(50),
	Waktu datetime,
	Jumlah smallint
)
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Machine Work Cycle')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Good Quality  (pairs)')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Missing Parts (pairs)')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Poor Measurement  (pairs)')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Stiching Defects  (pairs)')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Total Machine Output (pairs)')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Machine Time %')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Machine IDLE Time %')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Output Deviation %')
GO
INSERT INTO stb_db.dbo.dt_machine_description(DESCRIPTION) VALUES (N'Efficiency %')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (0, N'No Reasson')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (1, N'Benang Putus')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (2, N'Ganti Ukuran Warna')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (3, N'Mesin Rusak - Strap tidak terpotong / ganti pisau')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (4, N'Mesin Rusak - Ring Slide gagal masuk strap')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (5, N'Mesin Rusak - Feeding Ring Slade macet')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (6, N'Mesin Rusak - Jahitan jelek')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (7, N'Mesin Rusak - Strap panjang pendek')
GO
INSERT INTO stb_db.dbo.EventDefinisi(ID, Keterangan) VALUES (8, N'Perawan Mesin')
GO
INSERT INTO stb_db.dbo.g_groups(GROUP_NAME, DESCRIPTION) VALUES (N'Super Admin', N'can CREATED, READ, UPDATE, DELETE User ')
GO
INSERT INTO stb_db.dbo.g_groups(GROUP_NAME, DESCRIPTION) VALUES (N'Admin/spv', N'can CREATED, READ, UPDATE, DELETE content menu')
GO
INSERT INTO stb_db.dbo.g_groups(GROUP_NAME, DESCRIPTION) VALUES (N'Operator', N'can CREATED, READ, UPDATE, content menu')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (1, N'admin', N'21232f297a57a5a743894a0e4a801fc3', N'heriipurnama', '2017-08-10 00:00:00.0', '2017-08-10 00:00:00.0')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (1, N'125410101', N'0610a910e9cd7ec9f78b7e3f4d959e6f', N'admin', '2020-01-24 08:46:18.0', '2020-01-24 08:46:18.0')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (3, N'junita', N'0610a910e9cd7ec9f78b7e3f4d959e6f', N'125410101', '2020-01-24 09:20:45.0', '2020-01-24 09:20:45.0')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (2, N'heriipurnama', N'0610a910e9cd7ec9f78b7e3f4d959e6f', N'125410101', '2020-01-24 15:16:59.0', '2020-01-24 15:16:59.0')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (3, N'operator', N'0610a910e9cd7ec9f78b7e3f4d959e6f', N'admin', '2020-02-07 09:28:22.0', '2020-02-07 09:28:22.0')
GO
INSERT INTO stb_db.dbo.g_users(GROUP_ID, USERNAME, PASSWORD, CREATED_BY, CREATED_DATE, MODIFIED_DATE) VALUES (2, N'spv', N'0610a910e9cd7ec9f78b7e3f4d959e6f', N'admin', '2020-02-07 09:28:41.0', '2020-02-07 09:28:41.0')
GO
